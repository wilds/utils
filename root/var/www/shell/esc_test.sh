#!/bin/sh
arr=$(echo $1 | tr ";" "\n")
for x in $arr 
do
    t=${x%%:*} 
    v=${x#*:}
    v1=${v%:*}
    v2=${v#*:}

    case $t in
	a) /usr/local/bin/avrspi -t 250 -v $((v1 | $v2 << 4));;
	p) /usr/local/bin/avrspi -t 251 -v $((v1 | $v2 << 4));;
	r) /usr/local/bin/avrspi -r;;
	s) sleep $v;;
    esac

done
