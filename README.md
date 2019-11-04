# CIS3801C_WebAppDev
Name: Daniel LaMarche
Project name: Capra Cinemas

Description: My site is a website for a movie theater, to learn about what movies are showing, events, concessions available as well as buy tickets online and a contact page. This page was created for Christopher Mattie’s CIS3801C Section 01 Fundamentals of Mobile Web Application Development course.

Table of Contents: 
Homepage
Showtimes
Order Tickets
Concessions
Events
Contact Us

Installation instructions:

1. Create and configure a Bitnami LAMP server in Azure.
Create a Storage Account

●	Click +New located at the top left corner of your dashboard above the icons.
●	A pane titled New opens.
●	Type the word Storage in the filter text box and press Enter.
●	A new pane opens titled Storage.
●	Click on Storage account (blob, file, table, queue).
●	A new pane open titled Create storage account.
●	Click Create.
●	Type a Name for the storage account in the Name text box (must be all small case).
●	Make sure:
●	Deployment model is Resource manager.
●	Account kind is General purpose.
●	Performance is Standard.
●	Important: Change Replication to Locally-redundant storage (LRS).
●	Make sure:
○	Storage service encryption is Disabled.
●	For Resource group choose the Create new radio button.
●	Type a unique name in the Resource group text box.
●	Important: Make sure Location is Central US.
●	Check the Pin to dashboard option.
●	Click Create.

Deploy a LAMP Virtual Server

●	Click +New located at the top left corner of your dashboard above the icons
●	A pane titled New opens.
●	Click inside the filter text box.
●	Type “Lamp” and press Enter.
●	A pane titled Everything opens that lists a number of options.
●	Click on the LAMP Certified by Bitnami option. DO NOT PICK LAMP Multi-Tier.
●	A pane titled LAMP opens.
●	Click Create at the bottom of the pane.

●	A Create virtual machine pane opens.
●	Another pane titled Basics opens.
●	In the Name text box, type in a unique name for your server. Once you click out of the name text box a green checkmark to the right of the name should appear. 
●	!!! Save this username somewhere you can look it up later. It is the server administrator username.
●	Important: In the choice drop down for VM disk type choose HDD.
●	Under Authentication type click the Password option button.
●	Type in an acceptable password in the two text boxes for Password and Confirm password.
●	!!! Save this password with the administrator user name. It is the server administrator password. 
●	Under Resource group choose the Use existing radio button.
●	Click the dropdown list that appears under Resource group.
●	Choose the resource group that you created for your storage account.
●	Important: For Location choose Central US.
●	Click OK at the very bottom.

●	Important: In the new Choose a size pane that opens click View all link on the far right - top of the pane. DO NOT choose one of the recommended choices that first appear. Instead, after choosing View all, scroll all the way down and click on the A0 Basic option.
●	The click Select.

●	A new Settings pane will open.
●	Make sure High Availability is set to None.
Change Storage: Use managed disks to No.
●	Leave the defaults for the Network settings as is (defaults).
●	Make sure:
●	Extensions is set to No extensions.
●	Auto-shutdown is Off
●	Boot diagnostics is Enabled.
●	Guest OS diagnostics is Disabled.
●	Click on Diagnostics storage account (even if it has a name in it).
●	If a Create Storage account pane opens, close it (Click x on upper right). DO NOT create a new storage account.
●	A Choose storage account pane will open.
●	In the Choose a storage account pane, choose the storage account you created earlier.
●	Click OK at the bottom of the Settings pane.

●	A new create pane will open. Fill the email and telephone with mock data if desired.
●	Click Create at the bottom of the pane.

●	The panes will close and your dashboard will appear with a new small deployment box for the LAMP server.
●	It will take a little bit for the server to be created so have patience. Do not stop the server until this lab is done because you will need to find an entry in the initial boot log near the end of this lab.

Configure the Virtual Server

●	Once the server is deployed a new pane for the server should open. If you took a break and it is on your Azure dashboard or in the resource group you created, find and click on the server or server box to open it.
●	After you have opened the server administration pane, in the server administration pane there will be a number of options on the left.
●	Make sure Overview is selected from the options on the left.
●	Whenever you stop and restart the server it may acquire a new IP address. Therefore, it is best to give the server a Fully Qualified Domain Name (FQDN) or DNS name so you can use the FQDN to connect to the server.
●	In the right pane, under DNS name click Configure.
●	A Configuration pane will open.
●	Click in the text box below where it says “DNS name label (optional)”. 
●	Type your server name, or a unique name, into the box (must be all lower case).
●	Click out of the box to make sure the name is accepted. It will show a green check if it is ok. If not choose a different name.
●	DO NOT change the IP address.
●	DO NOT change the IP address Assignment. Leave it set to Dynamic.
●	Click Save at the top and close the Configuration pane.
●	!!! Copy and save the name and suffix located below DNS name to the right, for later use. The suffix should be .centralus.cloudapp.azure.com or something similar. The server name you entered together with the suffix make a FQDN, e.g. exampleserver.centralus.cloudapp.azure.com. You can now connect to your server using a web browser using the DNS name in the address bar of the browser. 
●	Because of the way that the Bitnami server installs it’s MySql database management system software, you will need to locate the MySql application password in the boot log. You will use this password later when you work with or sign in to the MySql application or its associated software that is installed on the server.
●	In the Server administration pane’s left hand side options, scroll down and click on “Boot diagnostics”.
●	A new Boot diagnostics pane opens with a boot diagnostics file showing.
●	Scroll down the boot diagnostics file. You will need to scroll down quite a bit, estimated past line 1000+. Scroll until you see the entry that looks like this: 
Setting Bitnami application password to 'ytj0Gf91FzjM'
(NOTE: It may take a while for the server to make this entry in these log files. Even though Azure lets you see into the server, the server may still be configuring itself, including creating the application password. You may have to wait a few minutes and come back to this log or refresh it. Do not wait for more than ½ hour as the server may overwrite this password over time)
●	Copy the password that shows up in your boot diagnostics file. DO NOT USE THIS EZAMPLE, ytj0Gf91FzjM. Your application password will be different than the example above. 
●	!!! You will need the password later. It is different than the server administrator password. This password will be used with an application administrator user named “root”. Save the password and make sure you don’t lose it or you will have to delete this server and create a new one.

Connect to your VM with SSH

SSH (Secure Shell) is a secure, encrypted connection to your virtual machine. Free SSH clients are available for every platform. Download one like putty for your computer if necessary (Mac OS X and Linux users should already have one installed) and set up a connection using your VM hostname and login information. 

For Windows:
●	Download putty from: http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html 
●	Run the putty program.
●	Put the FQDN for your server you saved in the host name box of putty.
●	Put 22 in the Port text box
●	Select the SSH radio button.
●	Under Saved Sessions type a name for this configuration setup.
●	Click Save. 
●	(If you open putty again later, you can click on the saved session name in the list and putty will populate all the settings for you that you designated.)
●	Click Open.
●	When the Putty Security alert pops up click Yes.
●	When it ask, type in your LAMP server Admin name and press enter.
●	Type in the LAMP server Admin password and press enter. (!!! Note as you type nothing will appear. This is a security feature. What you type is there, you just cannot see it.)
●	You should now be successfully logged in to your server using SSH as shown below.

2. Install Atom text editor

3. Set up GitHub repository and download GitHub Desktop program

4. Download and set up Filezilla

Connect to an FTP Server Using Filezilla
● Open Filezilla and navigate to the top of the panel and click on the icon that opens the site manager.
● Press New Site to add your server to Filezilla. 
● Give your site a name 
● Enter the DNS name of your server (in Azure open server, Overview option) 
● Change the encryption to SFTP – SSH File Transfer Protocol. 
● Change Logon Type: to Normal. 
● Enter your server admin user name. 
● Enter your server admin password. 
● Click connect
● Accept the certificate if it asks.
● Once you have successfully connected to your web space, you will see a status update under your login information that says "Directory listing successful." Once you have successfully connected, you will see your "Local site", or your computer hard drive, to the left. In the right column, you will see your "Remote site", or your server’s hard drive. Below each section is a list of files found in those locations.
● In the right hand side, to the left of the words “Remote site:”, replace the current path with following path and press enter  /opt/bitnami/apache2/htdocs
● This is the location of your Bitnami web server root folder,  where you will place your website files.
After you are in the Bitnami web server root, existing files will show. Right click on the index.html file and either delete or rename it. This is the old index file that Bitnami put in there as a default.
● To transfer files from your Local site to your Remote site, click and drag the file from its location in the Local panel to the desired location in the Remote panel. In the "Queued files" panel below your Local files column, you will see a brief summary of the file being transferred. If your file fails to transfer, it will be listed under "Failed transfers." If your file was successfully transferred, it will be listed under "Successful transfers."


Usage:
The website is used to update the goings on of Capra Cinemas. Movie art, movie listings info and cost of movies must be updated at least once weekly, and sometimes more often based on what events are upcoming, such as running older movies on special showings. This can be achieved by updating the myphp movies database associated with website.
Credits:
Created by Daniel LaMarche, Daniel is a student at Rasmussen College working towards his BS in Software Development.

License:
MIT License

Copyright (c) [2019] [Daniel G LaMarche]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
