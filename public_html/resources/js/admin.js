import Echo from '../../node_modules/laravel-echo/dist/echo.js';

// Enable pusher logging - don't include this in production


function getTimeAgo(timestamp) {
  const currentDate = new Date();
  const previousDate = new Date(timestamp);

  const timeDifference = currentDate - previousDate;

  const minute = 60 * 1000;
  const hour = 60 * minute;
  const day = 24 * hour;
  const week = 7 * day;
  const month = 30 * day;

  if (timeDifference < minute) {
    return 'Just now';
  } else if (timeDifference < hour) {
    return Math.floor(timeDifference / minute) + ' minutes ago';
  } else if (timeDifference < day) {
    return Math.floor(timeDifference / hour) + ' hours ago';
  } else if (timeDifference < week) {
    return Math.floor(timeDifference / day) + ' days ago';
  } else if (timeDifference < month) {
    return Math.floor(timeDifference / week) + ' weeks ago';
  } else {
    return Math.floor(timeDifference / month) + ' months ago';
  }
}

Pusher.logToConsole = true;

var pusher = new Pusher('7c49dc26fa6f5da89b93', {
  cluster: 'us2'
});

var channel = pusher.subscribe('notifications');
channel.bind('App\\Events\\UserNotification', function (data) {

  let notification = JSON.parse(JSON.stringify(data));
  let notiBox = document.getElementById('notification_box');
  let count = document.getElementById('notification_count')

  let notificationCount = +count.innerHTML + 1
  count.innerHTML = notificationCount;
  const notificationTimestamp = notification?.data?.time;
  console.log(notificationTimestamp, notification)
  const timeAgo = getTimeAgo(notificationTimestamp);
  var userDpPath = notification?.data?.path;
  var userDp = notification?.data?.user.user_dp;
  let userDpUrl = '';
  if (!userDpPath || !userDp) {
    userDpUrl = "https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_640.png";
  }else{
     userDpUrl = userDpPath + '/' + userDp;
  }
    
  let element = `
          <div class="notification ${!notification?.data?.is_read ? "unread" : ""}">
            <div class="time_wrap">${timeAgo}</div>
            <div class="user">
                <img src="${userDpUrl}" alt="">
            </div>
            <div class="content">
                <h3><a href="${notification?.data?.link}" target="_blank">${notification?.data?.type}</a></h3>
                <p>
                    ${notification?.data?.message}
                </p>
            </div>
          </div>
        `;
        notiBox.insertAdjacentHTML("afterbegin", element);
        document.getElementById("notificationSound").play();
        

});

// // Laravel Echo setup
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: '254b0be120075194dc55',
//     cluster: 'us2',
//     encrypted: true
// });

// const channel = 'notifications'; // The channel you want to check

// // Subscribe to the channel
// const notificationChannel = window.Echo.channel(channel);

// // Listening for the event
// notificationChannel.listen('.user-notification', (e) => {
//     // Display the notification to the admin
//     alert(e.message);
// });

// // Check if the client is listening to the channel
// notificationChannel.subscribed((subscription) => {
//     console.log(`Client is listening to the "${channel}" channel.`);
// });

// // Alternatively, you can also check the subscription status directly:
// if (notificationChannel.subscribed) {
//     console.log(`Client is listening to the "${channel}" channel.`);
// } else {
//     console.log(`Client is not listening to the "${channel}" channel.`);
// }
