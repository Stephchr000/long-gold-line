
var express = require('express');
var mysql = require('mysql');
var app = express();

var connection = mysql.createConnection({
    host: 'localhost',
    user: 'mthudg_chris',
    password: '441822000',
    database: 'mthudg_LongGoldLine'
});

connection.connect(function(error) {
//call back
if(!!error) {
    console.log('Error');
} else{
alert('Connected');

}
});
app.get('/', function(req, resp){
//about mysql
 Connection.query("SELECT * FROM Athlete", function(error, rows, field){
//call back
if(!!error){
    console.log('Error in query');
}else{
console.log(rows);
}
return rows[0].givenName;
});
});
app.listen(8080);
