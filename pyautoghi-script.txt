import schedule 
import pyautogui
import time


Contador = 0

pyautogui.FAILSAFE = False
pyautogui.PAUSE = 0.5
pyautogui.hotkey('winleft','r')
pyautogui.write("\\\gt-hserver\PastasDaRede\Planejamento\MIS\TALENTOS\Relatorios\Whast Fase I")
pyautogui.press('enter')
time.sleep(2)
pyautogui.PAUSE = 1
pyautogui.press('down')
pyautogui.PAUSE = 1
pyautogui.press('down')
pyautogui.PAUSE = 1
pyautogui.press('enter')
time.sleep(15)
pyautogui.PAUSE = 2
pyautogui.press('winleft')
pyautogui.PAUSE = 2
pyautogui.PAUSE = 0.5
pyautogui.write("Google")
pyautogui.PAUSE = 2
pyautogui.press('enter')
pyautogui.PAUSE = 2
pyautogui.write("https://web.whatsapp.com/")
pyautogui.PAUSE = 2
pyautogui.press('enter')
time.sleep(50)



while (Contador < 15000):
    pyautogui.hotkey('alt','tab')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('ctrl','c')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('alt','tab')
    pyautogui.PAUSE = 0.8
    pyautogui.moveTo(225,105)
    pyautogui.PAUSE = 0.8
    pyautogui.click()
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('ctrl','v')
    pyautogui.PAUSE = 0.8
    pyautogui.press('enter')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('alt','tab')
    pyautogui.PAUSE = 0.8
    pyautogui.press('right')
    pyautogui.PAUSE = 0.8
    pyautogui.press('F2')
    pyautogui.PAUSE = 0.8
    pyautogui.press('home')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('ctrl','a')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('ctrl','c')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('alt','tab')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('ctrl','v')
    pyautogui.PAUSE = 0.8
    pyautogui.moveTo(865, 430)
    pyautogui.PAUSE = 0.8
    pyautogui.click()
    pyautogui.PAUSE = 0.8
    pyautogui.press('enter')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('alt','tab')
    pyautogui.PAUSE = 0.8
    pyautogui.press('esc')
    pyautogui.PAUSE = 0.8
    pyautogui.press('down')
    pyautogui.PAUSE = 0.8
    pyautogui.press('Left')
    pyautogui.PAUSE = 0.8
    pyautogui.hotkey('alt','tab')
    Contador = Contador + 1
