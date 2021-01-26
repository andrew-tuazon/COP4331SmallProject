var mysql = require('mysql');
var path = require('path');
const { rootCertificates } = require('tls');

var connection = mysql.createConnection({
    host : 'cop4331team21.live',
    user : rootCertificates,
    password : '',
    database : 
})

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