/* "User" : {

            "1" : {
                "name":"David",
                "email":"david@email.com",
                "age":99,
                "location":"SF",
                "age_location":"99_SF"

            },

            "2" : {
                "name":"Alice",
                "email":"alice@email.com",
                "age":28,
                "location":"Berlin",
                "age_location":"28_SF"

            },


    } 


fdsf */


//equal to connection to firebase database
const rootRef= firebase.database().ref();


/// 1 - Find a user from a table User by ID
//---sql: select * from User where ID =1
const oneRef=rootRef.child('User').child('1');


/// 2 - Find a user from a table User by email
//---sql: select * from User where email ='alice@email.com'
const twoRef=rootRef.child('User').orderByChild('email').equalTo('alice@email.com');

// 3 -Limit 10 users
//---sql: select * from User limit 10;
const threeRef=rootRef.child('User').limitToFirst(10);

// 4 - Get all User that starts with 'D'
//---sql: select * from User where name like 'D%'
const fourRef=rootRef.child('User').orderByChild('name').startAt('D').endAt('D\utf8ff');

// 5 - Get all user who are less than 50
//---sql: select * from User where age<50;
const fiveRef=rootRef.child('User').orderByChild('age').endAt(49);

// 6 - Get all user who are greater than 50
//---sql: select * from User where age>50;
const sixRef=rootRef.child('User').orderByChild('age').startAt(51);

// 6 - Get all user who ages are between 20 and 100
//---sql: select * from User where age>=20 and age<=100;
const sevenRef=rootRef.child('User').orderByChild('age').startAt(20).endAt(100);

// 8 - Get all user who age is 28 and live in Berlin
//---sql: select * from User where location = 'Berlin' 
const eightRef=rootRef.child('User').orderByChild('age_location').equalTo('28_Berlin');


