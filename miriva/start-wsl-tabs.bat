@echo off
REM Start Windows Terminal with two WSL tabs: "Qwen" and "Claude"
wt new-tab -p "Ubuntu" --title "Qwen" --startingDirectory "C:\Users\ASUS" ; new-tab -p "Ubuntu" --title "Claude" --startingDirectory "C:\Users\ASUS"
