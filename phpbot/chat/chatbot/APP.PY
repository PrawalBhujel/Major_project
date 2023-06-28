from flask import Flask, request, jsonify
from flask_cors import CORS
from chatterbot import ChatBot
from chatterbot.trainers import ListTrainer
app = Flask(__name__)
CORS(app)

bot = ChatBot('Zeaps',
      logic_adapters=[
            'chatterbot.logic.MathematicalEvaluation',
        {
            'import_path': 'chatterbot.logic.BestMatch',
            'default_response': 'I am sorry,I do not understand.you can drop your question in suggestion box.',
            'maximum_similarity_threshold': 0.90
            }
    ])
trainer = ListTrainer(bot)
answers = [
"Hi",
"Helloo! how may i help you</h1>",

"hello",
"yes how may i help you",

"Hey",
"yes how may i help you",

"what is your name",
"my name is ZEAPS",

"How are you?",
"I'm good.",

"Great",
"thank you.Go ahead and write any query. 😃✨ ",

"good",
"thank you Go ahead and write query. 😃✨ ",

"fine",
"Go ahead and write query. 😃✨ ",

"Thank You",
"Your Welcome 😄",

"ThankYou",
"Your Welcome 😄",

"Thanks",
"Your Welcome 😄",

"Bye",
"Thank You for visiting!..",

"What do you do?",
"I am made to give Information about college.",

"What else can you do?",
"I can help you know more about college",

"how to change my phone no register",
"you can change your register phone no from registrartion office. ",

"how to change my register phone no ",
"you can change your register phone no from registrartion office. ",

"courses",
"<b>The link to college courses 👉<a href='https://inspiria.edu.in/degree-courses/'>click here</a></b>",

"what are the courses",
"<b>The link to college courses 👉<a href='https://inspiria.edu.in/degree-courses/'>click here</a></b>",

"link for college website",
"<b>The link to college website 👉<a href='https://inspiria.edu.in/'>click here</a></b>",

"college website",
"<b>The link to college website 👉<a href='https://inspiria.edu.in/'>click here</a></b>",

"where is college located",
"Siliguri",

"where is college",
"Siliguri",

"college location",
"Siliguri",

"location",
"siliguri",

"what is college timeing",
"college timing is 8:45 AM",

"college timeing",
"college timing is 8:45 AM",

"college time",
"college timing is 8:45 AM",

"when is annual sports day",
"Annual sport is on 18 Jun",

"annual sports day",
"Annual sport is on 18 Jun",

"total department  in college",
"10 departments",

"facility in college",
"play ground, library, indoor game zone, free wifi, cafe etc. ",

"facility provided by college",
"play ground, library, indoor game zone, free wifi, cafe etc. ",

"facility",
"play ground, library, indoor game zone, free wifi, cafe etc.",

"club",
"sports, music, dancing, painting etc",

"when is finnal exam",
"finnal exam is on 13 JUly",

"is admission open",
"YES its open",

"admission open",
"YES its open",

"payment last date ",
"last date of payment is on 12 Jun",

"last payment date",
"last date of payment is on 12 Jun",

"who is Bines",
"Bickal friend",



]
    
trainer.train(answers)

@app.route('/process_message', methods=['POST'])
def process_message():
    data = request.get_json()
    message = data['message']
    bot_response = bot.get_response(message)
    return jsonify({'code': 69, 'answer': bot_response.text})

if __name__ == '__main__':
    app.run(debug=True)
