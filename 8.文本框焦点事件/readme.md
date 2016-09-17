<p>
    当文本框获取焦点后,他的颜色需要有变化，当他失去焦点后，则要恢复为原来的样式。此功能可以极大的提升用户体验。使用户的操作可以得到及时的反馈。可以用css中的伪类选择符来实现以上的功能
</p>
<pre class="brush:html;toolbar:false">input:focus,textarea:focus{
			border:1px solid #f00;
			background: #fcc;
		}</pre>
<p>
    <strong style="font-family: Simsun; font-size: medium; white-space: normal;">注释：</strong><span style="font-family: Simsun; font-size: medium;">如果已规定 !DOCTYPE，那么 Internet Explorer 8 （以及更高版本）支持 :focus 伪类。所以可以用jqueryt来弥补ie的不足。</span>
</p>
<p>
    <span style="font-family: Simsun; font-size: medium;">（1）</span>当输入域失去焦点 (blur) 时改变其颜色：
</p>
<pre class="brush:html;toolbar:false">$(&quot;input&quot;).blur(function(){
  $(&quot;input&quot;).css(&quot;background-color&quot;,&quot;#D6D6FF&quot;);
});</pre>
<p>
    （2）当输入框获得焦点时，改变它的背景色：<span style="font-family: Simsun; font-size: medium;"></span><br/>
</p>
<pre class="brush:html;toolbar:false">$(&quot;input&quot;).focus(function(){
  $(&quot;input&quot;).css(&quot;background-color&quot;,&quot;#FFFFCC&quot;);
});</pre>
<p>
    <br/>
</p>