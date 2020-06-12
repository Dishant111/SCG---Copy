import sqlalchemy as db
import numpy as np

from skfuzzy import control as ctrl
import skfuzzy as fuzz
import matplotlib.pyplot as plt
import sys
from sqlalchemy import func

engine = db.create_engine('mysql+mysqldb://root:@localhost/careerguidancefinal')
connection = engine.connect()
metadata = db.MetaData()


def get_subject_score(c):
    subject_careerfields = db.Table('subject_careerfields', metadata, autoload=True, autoload_with=engine)
    subject_results = db.Table('subject_results', metadata, autoload=True, autoload_with=engine)
    # select AVG(marks) from  subject_results where student_id = "STD001" and subject_id=(select subject_id from subject_careerfields where careerfield_id = 7 );
    sbquery = db.select([subject_careerfields.columns.subject_id]).where(subject_careerfields.columns.careerfield_id == c)
    query3 = db.select([func.avg(subject_results.columns.marks)]).where(db.and_(subject_results.columns.student_id == std_id, subject_results.columns.subject_id.in_(sbquery)))
    ResultProxy3 = connection.execute(query3)
    ResultSet3 = ResultProxy3.fetchall()
    subject_score = int(ResultSet3[0][0])
    std_details.append(subject_score)


def get_careers_skill_score(stud_id):
    final_career = db.Table('final_career', metadata, autoload=True, autoload_with=engine)
    query = db.select([final_career.columns.careerfield_id]).where(final_career.columns.student_id == stud_id)
    ResultProxy = connection.execute(query)
    ResultSet = ResultProxy.fetchall()
    print(ResultSet)
    for i in range(len(ResultSet)):
        career_field = int(ResultSet[i][0])
        std_details.append(career_field)
        test_results = db.Table('test_results', metadata, autoload=True, autoload_with=engine)
        # select score from test_results where student_id= %s  and careerfield_id = %s
        query2 = db.select([test_results.columns.score]).where(
            db.and_(test_results.columns.student_id == std_id, test_results.columns.careerfield_id == career_field))
        ResultProxy2 = connection.execute(query2)
        ResultSet2 = ResultProxy2.fetchall()
        #print(type(int(ResultSet2[0][0])))
        print(len(ResultSet2))
        if len(ResultSet2) == 1:            
            skill_score = int(ResultSet2[0][0])
            std_details.append(skill_score)
            get_subject_score(career_field)
        else:
            std_details.pop()
            print("no data")


def fuzzy_logic_algo(sb, sk, crf):
    # New Antecedent/Consequent objects hold universe variables and membership
    # functions
    skill = ctrl.Antecedent(np.arange(0, 51, 1), 'skill')
    academic = ctrl.Antecedent(np.arange(0, 101, 1), 'academic')
    sucsratio = ctrl.Consequent(np.arange(0, 101, 1), 'success')

    # Custom membership functions can be built interactively with a familiar,
    # Pythonic API
    # Generate trapezoidal fuzzy membership functions
    skill['poor'] = fuzz.trapmf(skill.universe, [0, 0, 15, 17])  # skill weak[0-17]
    skill['average'] = fuzz.trapmf(skill.universe, [17, 20, 30, 37])  # skill medium[17-37]
    skill['good'] = fuzz.trapmf(skill.universe, [35, 37, 50, 50])  # skill good[35-50]

    # Generate trapezoidal fuzzy membership functions
    academic['poor'] = fuzz.trapmf(academic.universe, [0, 0, 40, 45])  # academic score weak[0-45]
    academic['average'] = fuzz.trapmf(academic.universe, [40, 45, 65, 70])  # academic score medium[40-70]
    academic['good'] = fuzz.trapmf(academic.universe, [65, 70, 100, 100])  # academic score good[65-100]

    # Generate trapezoidal fuzzy membership functions
    sucsratio['low'] = fuzz.trapmf(sucsratio.universe, [0, 0, 30, 35])  # academic score weak[0-35]
    sucsratio['medium'] = fuzz.trapmf(sucsratio.universe, [33, 35, 60, 70])  # academic score medium[33-70]
    sucsratio['high'] = fuzz.trapmf(sucsratio.universe, [65, 70, 100, 100])  # academic score medium[65-100]

    # You can see how these look with .view()
    skill.view()
 #   plt.savefig("Graphs/Skill_MF.pdf")  # to save figue in to PDF format
  #  plt.savefig("Graphs/Skill_MF.png")  # to save figue in to PNG format

    # You can see how these look with .view()
    academic.view()
  #  plt.savefig("Graphs/Academic_MF.pdf")  # to save figue in to PDF format
  #  plt.savefig("Graphs/Academic_MF.png")  # to save figue in to PNG format

    # You can see how these look with .view()
    sucsratio.view()
   # plt.savefig("Graphs/Success_rate_MF.pdf")  # to save figue in to PDF format
   # plt.savefig("Graphs/Succeess_rate_MF.png")  # to save figue in to PNG format

    # Fuzzy rules
    rule1 = ctrl.Rule(academic['good'] & skill['good'], sucsratio['high'])
    rule2 = ctrl.Rule(academic['good'] & skill['average'], sucsratio['high'])
    rule3 = ctrl.Rule(academic['average'] & skill['average'], sucsratio['medium'])
    rule4 = ctrl.Rule(academic['average'] & skill['good'], sucsratio['medium'])
    rule5 = ctrl.Rule(academic['poor'] | skill['poor'], sucsratio['low'])

    # Control System Creation and Simulation
    # Now that we have our rules defined, we can simply create a control system
    sucs_rate_ctrl = ctrl.ControlSystem([rule1, rule2, rule3, rule4, rule5])

    """
    In order to simulate this control system, we will create a
        "ControlSystemSimulation" :  Think of this object representing our controller applied to a specific set of cirucmstances.  
    """
    sucs_rate_final = ctrl.ControlSystemSimulation(sucs_rate_ctrl)

    """
    We can now simulate our control system by simply specifying the inputs
    and calling the ``compute`` method.
    """
    # Pass inputs to the ControlSystem using Antecedent labels with Pythonic API
    # Note: if you like passing many inputs all at once, use .inputs(dict_of_data)
    sucs_rate_final.input['academic'] = sb
    sucs_rate_final.input['skill'] = sk

    # Crunch the numbers
    sucs_rate_final.compute()
    ans = round(sucs_rate_final.output['success'], 4)
    # view results and print results
    print("Success Rate:", ans)
    update_scs_rate(ans, crf)
    sucsratio.view(sim=sucs_rate_final)
 #   plt.savefig("Graphs/Success_rate_graph_Output.pdf")  # to save figue in to PDF format
   # plt.savefig("Graphs/Succeess_rate_graph_Output.png")  # to save figue in to PNG format '''


def update_scs_rate(scrt, crfd):
    print("passing scs rate",scrt)
    final_career = db.Table('final_career', metadata, autoload=True, autoload_with=engine)
    query = db.update(final_career).values(success_rate=scrt).where(db.and_(final_career.columns.student_id == std_id, final_career.columns.careerfield_id == crfd))
    results = connection.execute(query)
    #print(results)


std_id = str(sys.argv[1])
std_details = [std_id]
get_careers_skill_score(std_id)
print("Student Details:")
print("[student_id,career_field_id_1,skill_score_1,subject_score_1,career_field_id_2,skill_score_2,subject_score_2]")
print(std_details)
while (len(std_details)) != 1:
    subject_score = std_details.pop()
    skill_score = std_details.pop()
    careers_field_id = std_details.pop()
    print("Subject Score:", subject_score)
    print("Skill Score:", skill_score)
    print("Career Field ID:", careers_field_id)
    fuzzy_logic_algo(subject_score, skill_score, careers_field_id)
    #BE SEM 8 GROUP 8
