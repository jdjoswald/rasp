import RPi.GPIO as GPIO
import time
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(26,GPIO.OUT)
GPIO.output(26,True)
time.sleep(3)
GPIO.output(26,False)



