import time
from selenium import webdriver
from selenium.webdriver.common.by import By

driver = webdriver.Chrome()

driver.get("https://ptrbankapp2.azurewebsites.net")

time.sleep(5)
p2link=driver.find_element(By.PARTIAL_LINK_TEXT,"Enter Bank")
p2link.click()
time.sleep(5)
textbox = driver.find_element(By.NAME,"AcntNum")
textbox.send_keys("663355")
time.sleep(5)
submitbutton = driver.find_element(By.XPATH, '//button[text()="Submit"]')
submitbutton.click()
#p3link=driver.find_element(By.PARTIAL_LINK_TEXT,"Page 3")
#p3link.click()
time.sleep(5)

driver.quit()
