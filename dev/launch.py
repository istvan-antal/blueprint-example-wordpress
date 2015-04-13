#!/usr/bin/env python
from blueprint import Infrastructure
import argparse

parser = argparse.ArgumentParser(description='Launch the application.')
parser.add_argument('--env', metavar='env', type=str, help='Environment to launch in.', default='dev')
parser.add_argument('--name', metavar='name', type=str, help='Application name.', default='wordpress')
args = parser.parse_args()

blueprint = Infrastructure(environment=args.env)
instance = blueprint.create_instance(id=args.name)

instance.provision()
instance.setup_generic_php()

mysql = instance.create_mysql('Qtn46g6b')
mysql.create_db_with_user('wordpress', 'wordpress', 'wordpress')

instance.install_redis()
instance.use_redis_php_sessions()

instance.run_commands(
    'mkdir -p /opt/apps',
    'cd /opt/apps',
    'wget https://wordpress.org/latest.tar.gz',
    'tar xvzf latest.tar.gz',
    'cd wordpress',
    'mkdir wp-content/uploads',
    'chmod -R 0777 wp-content'
)

instance.upload_file('wp-config.php', '/opt/apps/wordpress/wp-config.php')

instance.use_nginx_config('nginx.conf')
instance.install_my_key()

print "For mail sending please run: sudo apt-get install postfix"