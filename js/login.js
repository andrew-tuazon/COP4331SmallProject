let mysql = require('mysql');
var path = require('path');
var express = require('express');
const { rootCertificates } = require('tls');

const connection = mysql.createConnection({
    host : 'cop4331team21.live',
    user : rootCertificates,
    password : '',
    database : 'USERS'
});

const urlBase = 'http://cop4331team21.live/LAMPAPI'
const extension = '.php'

let userID = 0;
let firstName = "";
let lastName = "";

function doLogin() {
    // let login = ;
    let login = document.getElementById("loginName").nodeValue;
    let password = document.getElementById("loginPassword").nodeValue;
    let hash 
    
}

function doRegister() {
    return;
}

function isLoggedIn () {
    // ...
    const { token, user } = response.body
    localStorage.setItem('user', user)
}

function doLogout()
{
	userId = 0;
	firstName = "";
	lastName = "";
	document.cookie = "firstName= ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
	window.location.href = "index.html";
}

function saveCookie()
{
	var minutes = 20;
	var date = new Date();
	date.setTime(date.getTime()+(minutes*60*1000));	
	document.cookie = "firstName=" + firstName + ",lastName=" + lastName + ",userId=" + userId + ";expires=" + date.toGMTString();
}
