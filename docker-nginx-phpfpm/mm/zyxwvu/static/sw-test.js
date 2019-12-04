// sw-js

self.addEventListener('notificationclick', function (e) {
  var jumpurl = e.notification.data
  e.notification.close();
  e.waitUntil(
      // 获取所有clients
      self.clients.matchAll().then(function (clients) {
          if (!clients || clients.length === 0) {
              // 当不存在client时，打开该网站
              self.clients.openWindow && self.clients.openWindow(jumpurl);
              return;
          }
          // 切换到该站点的tab
          clients[0].focus && clients[0].focus();
          clients.forEach(function (client) {
              // 使用postMessage进行通信
              client.postMessage(action);
          });
      })
  );
});
