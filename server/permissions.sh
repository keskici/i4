cd ~/web/i4

# all folders should not be globally accessible
chmod 700 ajax/
chmod 700 data/
chmod 700 server/

# html is publicly accessible, not readable
chmod 711 html/ 
chmod 711 html/*.php

# all these directories publicly accessible, not readable
chmod 711 html/js/
chmod 711 html/css/
chmod 711 html/img/

# these files are globally readable
chmod 744 html/js/*
chmod 744 html/css/*
chmod 744 html/img/*
