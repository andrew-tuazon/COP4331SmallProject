var mysql = require('mysql');
var path = require('path');
var express = require('express');
const { rootCertificates } = require('tls');

var connection = mysql.createConnection({
    host : 'cop4331team21.live',
    user : rootCertificates,
    password : '',
    database : 'USERS'
});

const urlBase = 'http://cop4331team21.live/LAMPAPI'
const extension = '.php'

let userID = 0
let firstName = ""
let lastName = ""

function doLogin() {
    // let login = ;
    return;
}

function doRegister() {
    return;
}

function isLoggedIn () {
    // ...
    const { token, user } = response.body
    localStorage.setItem('user', user)
}

function logout () {
    localStorage.removeItem('token')
    localStorage.removeItem('user')
}