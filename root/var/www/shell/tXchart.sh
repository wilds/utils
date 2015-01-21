#!/bin/sh
gnuplot <<- EOF
	set term png size 2048, 1536
	
	set output "$2"

	set autoscale y
#	set yrange [1000:1600]
#	set ytics 50
	set grid ytics lt 0 lw 1 lc rgb "#bbbbbb"

	plot \
		"$1" using 2 title 'Value 1' with lines \
		,"$1" using 3 title 'Value 2' with lines \
		,"$1" using 4 title 'Value 3' with lines \
		,"$1" using 5 title 'Value 4' with lines 
EOF

