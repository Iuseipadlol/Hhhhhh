import telebot
from telebot.types import BotCommand

bot = telebot.TeleBot('7330079826:AAG1YxgLdfEoVHiUe-hClRBaiqK_pQwVlKE')
@bot.message_handler()
def message(message):
    if message.text.lower() == "лука":
        bot.send_message(message.chat.id, f"ЧОРТ👎👎👎👎👎👎👎")
    if message.text.lower() == "саид":
        bot.send_message(message.chat.id, f"ЧОРТ👎👎👎👎👎👎👎")
bot.polling(none_stop=True)
