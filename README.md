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

4. download the repository: wget https://github.com/boecomp/telnum-lookup/archive/refs/heads/tel-search.zip

5. unzip the repository: unzip tel.search.ch.zip

6. change ownership to wms: chown -R wms:wms telnum-lookup-tel-search

7. change to directory: cd telnum-lookup-tel-search

8. request a tel-search.ch API key for the customer: https://tel.search.ch/api/getkey

9. add this new tel-search.ch key: nano-tiny settings.php

10. close and save the settings file: ctrl-x und Y (yes) enter

11. done
