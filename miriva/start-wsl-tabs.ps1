# Start Windows Terminal with two WSL tabs: "Qwen" and "Claude"

# Get the default WSL profile name
$wslProfile = "Ubuntu"  # Change this if your WSL profile has a different name

# Launch Windows Terminal with two tabs
Start-Process wt -ArgumentList "-p","$wslProfile","--title","Qwen",";","new-tab","-p","$wslProfile","--title","Claude"
