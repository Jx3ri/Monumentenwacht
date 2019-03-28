import time, datetime, schedule, subprocess

def runPhp():
    subprocess.call("C:\\Users\\Mike\\OneDrive\\xampp\\php\\php.exe reminder.php")
    print("Executed php file at: ", datetime.datetime.now)

schedule.every(5).seconds.do(runPhp)

while 1:
    schedule.run_pending()
    time.sleep(1)
    