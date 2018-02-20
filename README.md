#  PHP-push-to-NodeJs
 <p>利用redis队列作为中间件，实现多语言之间的消息实时推送。

 本项目演示的为php推送实时消息至网页前端，利用php推送数据至redis，nodeJS实时接收，并与网页客户端建立websocket通讯，保障消息实时传递。简单的nodeJS websocket链接，并利用redis中间层，实现PHP后端推送消息到前台。</p>

<h4>
安装要求
</h4>
<pre>
1, php + redis 扩展
2, nodeJS，进入到 server/node/ 目录  执行 npm install
3, 系统安装redis服务端
</pre>
 </p>
 <p>
<h4>测试使用</h4>
<pre>
1，进入到 server/node/ 目录，使用forever命令启动 channel.js
   forever channel.js
2, 配置webserver，可以访问client文件夹下的 index.html文件，并打开控制台观察Network连接情况。
3, 进入到 server/php/ 目录， 使用php命令执行 push.php
   /usr/local/php/bin/php push.php test '您好，Node'
</pre>
 </p>
