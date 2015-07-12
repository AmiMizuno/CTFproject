import httplib2
import json
import os
import random
import string
import sys
import time
import re

def id_generator(size=6, chars=string.ascii_uppercase + string.digits):
	return ''.join(random.choice(chars) for _ in range(size))

# errors: (1,"sys.argv"),(2,"service unvailable"),(3,"Flag not found"),(4,"mumbled")
headers = {
	'Content-Type':'application/x-www-form-urlencoded',
	'User-Agent': 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:19.0) Gecko/20100101 Firefox/19.0',
	'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Accept-Language': 'ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3',
	'Accept-Encoding': 'gzip, deflate',
	'Cookie' : '',
	'Connection': 'keep-alive'
}

status = {
	"error" : [],
	"get" : 1,
	"put" : 1,
	"info" : "none",
}


def reg_login_putFlag(ip,flag):
	string_reg = "http://" + ip + "/reg.php"
	string_login = "http://" + ip + "/login.php"
	string_message = "http://" + ip + "/index.php"
	string_orders = "http://" + ip + "/orders.php"
	pswd = id_generator(size=random.randint(5,10))
	messg = id_generator(size=random.randint(10,20))
	login = id_generator(size=random.randint(4,8))
	h = httplib2.Http(timeout=6)
	try:
		#register&flag
		post_param = 'name=' + login + '&password=' + pswd + '&password2=' + pswd+'&e-mail='+login+'mailru&info='+flag
		response, content = h.request(string_reg, 'POST', post_param, headers=headers)
		if not login in content:
			status["error"].append(4)
			return False
		#login
		post_param = 'name=' + login + '&password=' + pswd
		response, content = h.request(string_login, 'POST', post_param, headers=headers)
		headers['Cookie'] = response['set-cookie']
		
		#message
		post_param = 'text=' + messg
		response, content = h.request(string_message, 'POST', post_param, headers=headers)
		
		
		#order
		
		post_param='wsk1=1&chival='+str(random.randint(0,15))+'&vodka=1&absol='+str(random.randint(0,15))+'&wsk2=1&johnie='+str(random.randint(0,15))+'&martini=1&bianco='+str(random.randint(0,15))+'&liker=1&dekuyper='+str(random.randint(0,15))+'&jack=1&jd='+str(random.randint(0,15))
		response, content = h.request(string_orders, 'POST', post_param, headers=headers)
		
		return  login+'_'+pswd
		
	except:
		status["get"] = "0"
		status["error"].append(2)
		return False




def check_flag(ip, flag, info):
	string_login = "http://" + ip + "/login.php"
	string_check = "http://" + ip + "/profile.php"
	info1=info.split('_')
	login=info1[0]
	pswd=info1[1]
	h = httplib2.Http(timeout=3)
	
	try:
		#login
		post_param = 'name=' + login + '&password=' + pswd
		response, content = h.request(string_login, 'POST', post_param, headers=headers)
		headers['Cookie'] = response['set-cookie']
		#get flag from profile.php
		post_param = ''
		response, content = h.request(string_check, 'POST', post_param, headers=headers)
		if flag in content:
			return True
		else:
			status["error"].append(3)
			return False
			
	except:
		status["get"] = "0"
		status["error"].append(2)
		return False

#############START####################

if 0 and not len(sys.argv) == 5:
	print json.dumps(
		{
			"error" : [1,],
		}
	)
	sys.exit()

##############SYS.ARGV###############

#ip = sys.argv[1] 		#"127.0.0.1/labs/dbo/dbo_service" 
#flag = sys.argv[2] 		#'RootSecret' #
#info = sys.argv[3] 		#'360quivb0p' # #shield //status["info"]
#old_flag = sys.argv[4] 	#'qwertyui' #


ip = "127.0.0.1/pr/CTFproject/"
flag ='RootSecret'
info = 'QODH1_44'
old_flag = 'RootSecret'
############# MAIN PROGRAM #############

res2 = reg_login_putFlag(ip,flag)
if res2 == False:
	status["get"] = 0
	status["put"] = 0
else:
	status["info"] = res2
res1 = check_flag(ip,old_flag,info)
if res1 == False:
	status["get"] = 0

	

print status
#print json.dumps(status)
