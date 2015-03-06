#!/bin/bash
OLDIFS=$IFS
IFS='
'
find . -iname '*.php' > files.txt

test=$(cat files.txt);
for files in $test; do
    echo bearbeite $files
    sed s/'Litecoin/Bitcrystal'/g "${files}" > "${files}.tmp"
    mv "${files}.tmp" "${files}"
    echo bearbeite $files abgeschlossen
done
