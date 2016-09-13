<p>
    终于把jquery与ajax简易聊天做好了，花了一天时间，实属不易。最终解决问题的时候，听着仙剑一的时空之钥，心情飞了起来。ok！我们来看看知识点。<br/>
</p>
<p>
    （1）整体思路
</p>
<p>
    jquery提交数据到php -&gt; php存入内容到mysql数据库中 -&gt; php通过时间戳大小找到新添加的所有数据并以xml的形式返回 -&gt; jquery解析xml数据并显示在页面上。
</p>
<p>
    （2）$.post()方法
</p>
<p>
    $.post(url[.data][.callback][.type])
</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;url : String 请求的html的url地址<br/>
</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;data(可选) ： Object 发送至服务器的key/value<br/>
</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;callback(可选) ： function 载入成功时回调函数（只有当response的返回状态是success才调用改方法）自动将请求结果和状态传递给该方法<br/>
</p>
<p>
    &nbsp;&nbsp;&nbsp;&nbsp;type(可选) : String 服务端返回内容的格式包括，xml，html，script，json，text。
</p>
<p>
    &nbsp;get与post方法的比较：<br/>
</p>
<p>
    A:get请求会将参数跟在URL后面进行传递，而post请求则是作为http消息的实体内容发送给web服务器，当然，在ajax请求中，这种区别对用户是不可见的。
</p>
<p>
    B:get方法对传输的数据有大小限制（通常不能大于2kb），而使用post方式传递的数据量要比get方式大得多（理论上不受限制）
</p>
<p>
    C:get请求的数据会被浏览器缓存起来，因此其他人就可以从浏览器的历史记录中读取到这些数据。在某种情况下，get会带来严重的安全性问题。而post可以避免这些问题。
</p>
<p>
    D:get和post方式传递的数据在服务器端的获取也不相同。
</p>
<p>
    <br/>
</p>