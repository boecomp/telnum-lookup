# telnum-lookup
Telnum lookup (tel-search.ch)

The main purpose of this tool is to activate the ability to request the name to called telefone number.

included in the search.ch free version are 1000 requests per month. If you need more requests you can request a abo with more requsts per month

Source:
https://tel-search.ch

Terms:
https://tel.search.ch/api/terms

Getkey:
https://tel.search.ch/api/getkey

Help:
https://tel.search.ch/api/help


How to:

Go to Wildix Terminal

cd /var/www

wget https://github.com/boecomp/telnum-lookup/archive/refs/heads/tel-search.zip

unzip tel.search.ch.zip

chown -R wms:wms telnum-lookup-tel-search

cd telnum-lookup-tel-search

nano-tiny settings.php (hier den Key anpassen)
ctrl-x und Y (yes) enter
