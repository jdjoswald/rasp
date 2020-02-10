#import RPi.GPIO as GPIO
#import time
f = open ("estado.txt","w")
f.write("1")
f.close()
f = open ("estado.txt","r")
estado= int(f.read())
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(19,GPIO.OUT)
GPIO.output(19,estado)


