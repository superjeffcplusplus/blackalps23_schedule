#! /bin/bash
nmcli device wifi connect blackAlps password "1234"
nmcli connection modify blackAlps connection.autoconnect yes