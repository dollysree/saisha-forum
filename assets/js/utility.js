// Create a client instance

client = null;

connected = false;
var path_no="";
  var connect_stat="offline";
// called when the client connects
function onConnect(context) {
  // Once a connection has been made, make a subscription and send a message.
  var connect_stat="online";
  console.log("Client Connected");
  connected = true;
  subscribe("/follow/5aec979eb3f3d8f193e43955ae0602c4-1475742801899");
  publish("/follow/5aec979eb3f3d8f193e43955ae0602c4-1475742801899","hi sunny");
  setFormEnabledState(true);


}

function onFail(context) {
  console.log("Failed to connect");
  connected = false;
  setFormEnabledState(false);
}

// called when the client loses its connection
function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("Connection Lost: " + responseObject.errorMessage);
    connect();
  }
  connected = false;
}

// called when a message arrives
function onMessageArrived(message) {
   var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', '../sound/ping.mp3');
        audioElement.setAttribute('autoplay', 'autoplay');
        //audioElement.load()
        $.get();

        audioElement.addEventListener("load", function() {
            audioElement.play();
        }, true);
              Materialize.toast('<span>New notification</span>', 5000);
              console.log('Message Recieved: Topic: ', message.destinationName, '. Payload: ', message.payloadString, '. QoS: ', message.qos);
              console.log(message);
              var messageTime = new Date().toISOString();
}

function connectionToggle(){

  if(connected){
    disconnect();
  } else {
    connect();
  }


}

function connect(clientid_n,path_n){
    var hostname = "iot.eclipse.org";
    var port = 80;
    var clientId = clientid_n;
    var path = "/ws";
    var keepAlive = 9999999999999;
    var timeout = Number( " ");
    var lastWillTopic = "";
    var lastWillQos = Number( );
    var lastWillRetain = " ";
    var lastWillMessage = "";


    if(path.length > 0){
      client = new Paho.MQTT.Client(hostname, Number(port), path, clientId);
    } else {
      client = new Paho.MQTT.Client(hostname, Number(port), clientId);
    }
    console.info('Connecting to Server: Hostname: ', hostname, '. Port: ', port, '. Path: ', client.path, '. Client ID: ', clientId);

    // set callback handlers
    client.onConnectionLost = onConnectionLost;
    client.onMessageArrived = onMessageArrived;


    var options = {
      invocationContext: {host : hostname, port: port, path: client.path, clientId: clientId},
      timeout: timeout,
      keepAliveInterval:keepAlive,
      onSuccess: onConnect,
      onFailure: onFail
    };



 

    if(lastWillTopic.length > 0){
      var lastWillMessage = new Paho.MQTT.Message(lastWillMessage);
      lastWillMessage.destinationName = lastWillTopic;
      lastWillMessage.qos = lastWillQos;
      lastWillMessage.retained = lastWillRetain;
      options.willMessage = lastWillMessage;
    }
    var connect_stat="connecting"
    // connect the client
    client.connect(options);
}

function disconnect(){
    console.info('Disconnecting from Server');
    client.disconnect();
    connected = false;
    setFormEnabledState(false);

}

// Sets various form controls to either enabled or disabled
function setFormEnabledState(enabled){


}

function publish(topic_p,topic_m){
    var topic = topic_p;
    var qos = 2;
    var message =topic_m;
    console.info('Publishing Message: Topic: ', topic, '. QoS: ' + qos + '. Message: ', message);
    message = new Paho.MQTT.Message(message);
    message.destinationName = topic;
    message.qos = Number(qos);
    client.send(message);
}


function subscribe(topic_s){
    var topic = topic_s;
    var qos = 2;
    console.info('Subscribing to: Topic: ', topic, '. QoS: ', qos);
    client.subscribe(topic, {qos: Number(qos)});
}

function unsubscribe(topic_s){
    var topic = topic_s;
    console.info('Unsubscribing from ', topic);
    client.unsubscribe(topic, {
         onSuccess: unsubscribeSuccess,
         onFailure: unsubscribeFailure,
         invocationContext: {topic : topic}
     });
}


function unsubscribeSuccess(context){
    console.info('Successfully unsubscribed from ', context.invocationContext.topic);
}

function unsubscribeFailure(context){
    console.info('Failed to  unsubscribe from ', context.invocationContext.topic);
}

function clearHistory(){
    var table = document.getElementById("incomingMessageTable");
    //or use :  var table = document.all.tableid;
    for(var i = table.rows.length - 1; i > 0; i--)
    {
        table.deleteRow(i);
    }

}

// Just in case someone sends html
function safe_tags_regex(str) {
   return str.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
}
