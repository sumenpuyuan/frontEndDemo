<p>
	设计到的jquery知识
</p>
<p>
	<span style="white-space:pre">	</span>（1）基本过滤选择器
</p>
<span style="white-space:pre">	</span>:gt(index) &nbsp;选取索引大于index的元素（index从0开始）<br />
<span style="white-space:pre">		</span>改变索引值大于3的&lt;div&gt;元素的样式 &nbsp; $(&quot;div:gt(3)&quot;).css(&quot; &nbsp; &nbsp; &quot;)<br />

<p>
	<span style="white-space:pre">	</span>:eq(index)选取所以等于index的元素
</p>
<p>
	<span style="white-space:pre">	</span>:lt(index)选取索引小于index的元素
</p>
<p>
	<span style="white-space:pre">	</span>:first选取第一个元素
</p>
<p>
	<span style="white-space:pre">	</span>:last选取最后一个元素
</p>
<p>
	<span style="white-space:pre">	</span>:not(selector)去除所有给定选择器匹配的元素
</p>
<p>
	<span style="white-space:pre">	</span>（2）层次选择器
</p>
<p>
	<span style="white-space:pre">	</span>$(&quot;parent&gt;child&quot;) 选取parent元素下的child（子元素）&nbsp;
</p>
<p>
	<span style="white-space:pre">	</span>（3）内容过滤选择器
</p>
<p>
	<span style="white-space:pre">	</span>:contains(text) &nbsp;选取含有文本内容为“text‘’”的元素
</p>
<p>
	<span style="white-space:pre">	</span>(4)可见性过滤选择器
</p>
<p>
	<span style="white-space:pre">	</span>:hidden 选取所有不可见的元素 &nbsp;它会选取所有不可兼得元素，包括&lt;input type=&quot;hidden&quot;,&lt;div style=&quot;display:none&quot;和&lt;div style=&quot;visibility:hidden&quot;
</p>
<p>
	<span style="white-space:pre">	</span>如果只想选取input元素，使用$(&quot;input:hidden&quot;)
</p>
<p>
	<span style="white-space:pre">	</span>:visible 选取所有可见的元素
</p>
<p>
	<span style="white-space:pre">	</span>
</p>
<p>
	<span style="white-space:pre">	</span>.css(name,value)给元素设置样式
</p>
<p>
	<span style="white-space:pre">	</span>.text(string)设置所有匹配元素的内容
</p>
<p>
	<span style="white-space:pre">	</span>filter(expr)筛选出与指定表达式匹配的元素集合，其中expr可以是多个选择器的组合。
</p>
<p>
	<span style="white-space:pre">	</span>.addClass(class)未匹配的元素添加指定的类名
</p>
<p>
	<span style="white-space:pre">	</span>return &nbsp;false;js设置超链接不跳转
</p>