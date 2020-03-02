#!/bin/sh
curl -i -s "$1" | grep -i Location | cut -d ' ' -f 2
