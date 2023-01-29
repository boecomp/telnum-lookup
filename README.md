# telnum-lookup
Telnum lookup (tel-search.ch)

The main purpose of this tool is to activate the ability to request the name to called telefone number.

included in the tel-search.ch free version are 1000 requests per month. If you need more requests you can request a abonnement with more requests per month

###################################################################

Source:
https://tel-search.ch

Terms:
https://tel.search.ch/api/terms

Getkey:
https://tel.search.ch/api/getkey

Help:
https://tel.search.ch/api/help

###################################################################


How to:

1. Go to Wildix WMS Terminal

2. Login with su

3. change directory: cd /var/www

4. install git if not installed /

5. apt-get update

6. apt-get install git

7. clone repository

8. git clone https://github.com/boecomp/telnum-lookup.git

9. change ownership to wms: chown -R wms:wms telnum-lookup

10. change to directory: cd telnum-lookup

11. request a tel-search.ch API key for the customer: https://tel.search.ch/api/getkey

12. add this new tel-search.ch key: nano-tiny settings.php

13. close and save the settings file: ctrl-x und Y (yes) enter

14. Add custom application from dialplan-examples.txt to all dialplans where calleN should be requested from tel-search

15. done

content:

1. .gitignore
2. dialplan-example.txt --> example how to use in dialplan
3. LICENSE --> (OpenSource)
2. README.md
2. settings.php --> API Key
2. telnum.php --> get callerN via telsearch 
3. dialplan-example.txt --> example how to use in dialplan
