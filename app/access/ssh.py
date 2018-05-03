#!/usr/bin/python

# All SSH libraries for Python are junk (2011-10-13).
# Too low-level (libssh2), too buggy (paramiko), too complicated
# (both), too poor in features (no use of the agent, for instance)

# Here is the right solution today:

import os
import sys

USERNAME="mmueni"
PASSWORD="emqbd.08."
HOST="192.168.3.64"
SCRIPT="ls /home/mmueni/"
# Ports are handled in ~/.ssh/config since we use OpenSSH

data = {"user": "mmueni",
        "host": "192.168.3.64",
        "password": "emqbd.08.",
        "commands": " ls /home/mmueni/" .join(sys.argv[1:])}

command = "sshpass -p {password} ssh {user}@{host} {commands}"
os.system(command.format(**data))


    