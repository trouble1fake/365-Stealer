# **365-Stealer**

I have been currently working on Azure and Office365 to explore and learn various techniques to abuse its features. In this blog we will see how azure app registration feature can be leveraged to phish users in the same tenant and steal their access token which will allow us to do malicious activity.

Before introducing my tool, I would like to thank [0x09AL](https://twitter.com/0x09AL) for writing [office365-attack-toolkit](https://github.com/mdsecactivebreach/o365-attack-toolkit) .

Office365 Attack Toolkit was originally written in Golang when I first started using this tool. It was a bit difficult to understand the setup since it requires many things to be installed like gcc (MinGw 64 bit), Git, and some Golang packages.

Also, there is no option where we can clear the database or save the access token for a particular user. And it doesn&#39;t create outlook rules due to some minor issue.

So, I decided to create a replica of Office365 Attack Toolkit in python to learn and improve my programming skills and I have tried to keep the setup very simple and easy.

## **Introducing 365-Stealer**

365-Stealer is the tool written in python3 which steals data from victims office365 by using access\_token which we get by phishing.

It steals outlook mails, attachments, oneDrive files, OneNote notes and injects macros.

**You can find the tool here** [**https://github.com/AlteredSecurity/365-Stealer/**](https://github.com/AlteredSecurity/365-Stealer/)

Before setting up the tool let&#39;s first register an application in Azure Active Directory.

## **Create App registration**

Registering your application establishes a trust relationship between your app and the Microsoft identity platform.

1. Register an app in azure active directory and enable **access\_token** and **token\_id** in authentication.

<img src="https://i.ibb.co/XVDzgFq/1.png" alt="1" border="0">

<img src="https://i.ibb.co/mvSbfXS/2.png" alt="2" border="0">

2. Copy the **clientId** from overview tab and replace it with **$client\_id value** in **index.php** also the $redirect\_uri if its not the same as yours

<img src="https://i.ibb.co/Q86FSXY/3.png" alt="3" border="0" width="500px">

## **Now will see how to set up this tool:**

1. Make sure to run this tool in a Windows machine that has Microsoft Word installed.
2. We will need to install [python3](https://www.python.org/downloads/) and [xmapp](https://www.apachefriends.org/index.html) server. (We can use any other web server that can help us to host php files)
3. Move all the files of the tool to its resources to **C:\xampp\htdocs** directory. ![](RackMultipart20200920-4-1sr9wfj_html_ae36021f8825f717.png)
4. Run the following command in cmd **pip install requests crayons**
5. Open **index.php** and replace the **client\_id** and **redirect\_uri** with the one that we setup while registering our application on azure. Then we are ready to use the tool.

<img src="https://i.ibb.co/qW4QKKX/4.png" alt="4" border="0" width="400px">

Start the apache server from xampp and visit [http://localhost/](http://localhost/)

Note - This application can also be hosted on the cloud infrastructure.

<img src="https://i.ibb.co/7Vj54c5/5.png" alt="5" border="0">

<img src="https://i.ibb.co/0fMjDb5/6.png" alt="6" border="0">
This is just a simple page we can further edit as per our needs.

As soon as a user clicks on the **Read more** button or any link and accepts the requested permissions, for now it will be redirected back to **http://localhost** but the same can be modified.

In the background our **365-Stealer** will be stealing all emails, attachments, onenote notes and files from onedrive.

Visit [http://localhost/yourVictims/](http://localhost/yourVictims/) to see all the users who got hacked also you can find an access\_token.txt file that contains the user&#39;s access token that will be valid for 1 hour. Access tokens are the thing that applications use to make API requests on behalf of a user. The access token represents the authorization of a specific application to access specific parts of a user&#39;s data.



<img src="https://i.ibb.co/6FCXKqT/7.png" alt="7" border="0">

<img src="https://i.ibb.co/FBpfpwj/8.png" alt="8" border="0">
To understand the features of this tool lets use it in the command line.

Firstly we need to grab that access token and run the following command.

**python 365-Stealer.py -t eyJ0eXAiOiJKV1QiLCJ………**

This will run like the following

<img src="https://i.ibb.co/KF9xjSd/9.png" alt="9" border="0">


## **Features**

Note: All configuration is done in **365-Stealer.py** itself

1. We need to provide extensions that we want to download from onedrive and outlook, and keywords that we want to search in the mails like &#39;password&#39; and also the macros location which you want to inject in the doc file.

<img src="https://i.ibb.co/1MFMCJp/10.png" alt="10" border="0" width="600px">

2. Tool is also capable of sending email from the particular victim id, we need to edit fromUser field as shown in the above screenshot. To create mails we need to edit the **mail** variable which is in json form as shown below in the screenshot.

<img src="https://i.ibb.co/pzh3mkw/11.png" alt="11" border="0" width="600px">


3. We can create outlook rules by editing rules variable

<img src="https://i.ibb.co/pzh3mkw/12.png" alt="11" border="0">

4. Comment out any feature that we don&#39;t want to use

<img src="https://i.ibb.co/s1wBYhh/13.png" alt="13" border="0">



Posted by:

[Raunak Parmar](https://twitter.com/trouble1_raunak)

Security Researcher at AlteredSecurity
