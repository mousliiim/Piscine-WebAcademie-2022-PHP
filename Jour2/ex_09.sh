#!/bin/bash
sed "$MY_LINE1,$MY_LINE2!d" | gsed -n "1~2p" | cut -d':' -f1 | rev | gsed ':a;N;$!ba;s/\n/, /g' | gsed 's/$/.\n/'
