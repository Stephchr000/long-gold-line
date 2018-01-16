
var mysql = require('mysql');

var connection = mysql.createConnection({
    host: 'longgoldline.org',
    user: 'root',
    password: '',
    database: 'LongGoldLineDB'
});

connection.connect(function(error) {
//call back
if(!!error) {
    console.log('Error');
} else{
console.log('Connected');
}
});
app.get('/', function(req, resp){
//about mysql
connection.query("SELECT * FROM LongGoldLineDB", function(error,rows, field){
//call back
if(!!error){
    console.log('Error in query');
}else{
console.log('Good Job Bro');
}
});
});
app.listen(8080)