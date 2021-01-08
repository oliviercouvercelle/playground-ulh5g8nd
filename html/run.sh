
echo "TECHIO> redirect-streams 'Output'"
#set XDEBUG_SESSION=1
php "header.php" $1".html" $3 > "output.html"


# cat $1".html"
#ls ../target -al
#ls ../workspace -al

#php Test.php $1".html" $2
#=remote_enable=1 remote_mode=req remote_port=9000 remote_host=localhost remote_connect_back=0
#set XDEBUG_SESSION=1
export XDEBUG_CONFIG="remote_enable=1"    # Démarrage de la session
php bin/console xdebug:test

/Applications/MAMP/bin/php/php7.4.2/bin/php Test.php $1".html" $2

unset XDEBUG_CONFIG
#php -dxdebug.remote_enable=1 -dxdebug.remote_mode=req -dxdebug.remote_port=9000 -dxdebug.remote_host=127.0.0.1 -dxdebug.remote_connect_back=0 Test.php $1".html" $2
echo "TECHIO> open -s /project/target/ output.html"

