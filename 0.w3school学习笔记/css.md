<p>
    （1）
</p>
<p>
    background-color 不能继承，其默认值是 transparent。transparent 有“透明”之意。也就是说，如果一个元素没有指定背景色，那么背景就是透明的，这样其祖先元素的背景才能可见。
</p> 
<p style="margin: 0px; padding: 0px; border: 0px; font-family: 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(249, 249, 249);">
    (2)背景关联
</p>
<p>
    如果文档比较长，那么当文档向下滚动时，背景图像也会随之滚动。当文档滚动到超过图像的位置时，图像就会消失。
</p>
<p>
    您可以通过&nbsp;background-attachment 属性防止这种滚动。通过这个属性，可以声明图像相对于可视区是固定的（fixed），因此不会受到滚动的影响
</p>
<p>
    (3)缩进文本
</p>
<p>
    CSS 提供了&nbsp;text-indent 属性，该属性可以方便地实现文本缩进。
</p>
<p>
    <span style="background-color: rgb(255, 0, 0);">注意</span>：一般来说，可以为所有块级元素应用 text-indent，但无法将该属性应用于行内元素，图像之类的替换元素上也无法应用 text-indent 属性。不过，如果一个块级元素（比如段落）的首行中有一个图像，它会随该行的其余文本移动。
</p>
<p>
    <span style="color: rgb(255, 192, 0);">提示</span>：如果想把一个行内元素的第一行“缩进”，可以用左内边距或外边距创造这种效果。
</p>
<p>
    (4)字间隔
</p>
<p>
    word-spacing 属性可以改变字（单词）之间的标准间隔。其默认值 normal 与设置值为 0 是一样的。
</p>
<p>
    word-spacing 属性接受一个正长度值或负长度值。如果提供一个正长度值，那么字之间的间隔就会增加。为 word-spacing 设置一个负值，会把它拉近：
</p>
<p>
    （5）文本装饰
</p>
<p>
    text-decoration 有 5 个值：
</p>
<p>
    none
</p>
<p>
    underline
</p>
<p>
    overline
</p>
<p>
    line-through
</p>
<p>
    blink
</p>
<p>
    不出所料，underline 会对元素加下划线，就像 HTML 中的 U 元素一样。overline 的作用恰好相反，会在文本的顶端画一个上划线。值 line-through 则在文本中间画一个贯穿线，等价于 HTML 中的 S 和 strike 元素。blink 会让文本闪烁，类似于 Netscape 支持的颇招非议的 blink 标记。
</p><span style="color: rgb(255, 192, 0);">注意：</span>text-decoration 值会替换而不是累积起来。
<p>
    （6）处理空字符
</p>
<p>
    <table class="dataintable" width="708">
        <tbody style="margin: 0px; padding: 0px; border: 0px;">
            <tr style="margin: 0px; padding: 0px; border: 0px;" class="firstRow">
                <th style="margin: 0px; padding-right: 15px; padding-left: 6px; border-color: rgb(170, 170, 170); vertical-align: baseline; text-align: left; background-color: rgb(213, 213, 213);">
                    值
                </th>
                <th style="margin: 0px; padding-right: 15px; padding-left: 6px; border-color: rgb(170, 170, 170); vertical-align: baseline; text-align: left; background-color: rgb(213, 213, 213);">
                    空白符
                </th>
                <th style="margin: 0px; padding-right: 15px; padding-left: 6px; border-color: rgb(170, 170, 170); vertical-align: baseline; text-align: left; background-color: rgb(213, 213, 213);">
                    换行符
                </th>
                <th style="margin: 0px; padding-right: 15px; padding-left: 6px; border-color: rgb(170, 170, 170); vertical-align: baseline; text-align: left; background-color: rgb(213, 213, 213);">
                    自动换行
                </th>
            </tr>
            <tr style="margin: 0px; padding: 0px; border: 0px;">
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    pre-line
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    合并
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    保留
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    允许
                </td>
            </tr>
            <tr style="margin: 0px; padding: 0px; border: 0px;">
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    normal
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    合并
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    忽略
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    允许
                </td>
            </tr>
            <tr style="margin: 0px; padding: 0px; border: 0px;">
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    nowrap
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    合并
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    忽略
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    不允许
                </td>
            </tr>
            <tr style="margin: 0px; padding: 0px; border: 0px;">
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    pre
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    保留
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    保留
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    不允许
                </td>
            </tr>
            <tr style="margin: 0px; padding: 0px; border: 0px;">
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    pre-wrap
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    保留
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    保留
                </td>
                <td style="margin: 0px; padding: 6px 15px 6px 6px; border-color: rgb(170, 170, 170); vertical-align: text-top; background-color: rgb(239, 239, 239);">
                    <p>
                        允许
                    </p>
                </td>
            </tr>
        </tbody>
    </table>（7）字体大小
</p><span style="background-color: rgb(255, 0, 0);">注意</span>：如果您没有规定字体大小，普通文本（比如段落）的默认大小是 16 像素 (16px=1em)。
<p>
    使用 em 来设置字体大小
</p>
<p>
    如果要避免在 Internet Explorer 中无法调整文本的问题，许多开发者使用 em 单位代替 pixels。
</p>
<p>
    W3C 推荐使用 em 尺寸单位。
</p>
<p>
    1em 等于当前的字体尺寸。如果一个元素的 font-size 为 16 像素，那么对于该元素，1em 就等于 16 像素。在设置字体大小时，em 的值会相对于父元素的字体大小改变。
</p>
<p>
    浏览器中默认的文本大小是 16 像素。因此 1em 的默认尺寸是 16 像素。
</p>
<p>
    可以使用下面这个公式将像素转换为 em：pixels/16=em
</p>
<p>
    （注：16 等于父元素的默认字体大小，假设父元素的 font-size 为 20px，那么公式需改为：pixels/20=em）
</p>
<h3>
    结合使用百分比和 EM
</h3>
<p>
    在所有浏览器中均有效的方案是为 body 元素（父元素）以百分比设置默认的 font-size 值：
</p>
<h4>
    实例
</h4>
<pre style="margin-top: 10px; margin-bottom: 0px; padding: 10px; border: 1px dotted rgb(119, 136, 85); font-family: Consolas, &quot;Courier New&quot;, Courier, monospace; width: 685px; font-size: 12px; background-color: rgb(245, 245, 245);">body {font-size:100%;}h1 {font-size:3.75em;}
h2 {font-size:2.5em;}
p {font-size:0.875em;}</pre>
<p>
    我们的代码非常有效。在所有浏览器中，可以显示相同的文本大小，并允许所有浏览器缩放文本的大小。
</p>
<p>
    （7）设置连接的格式<br/>
</p>
<p>
    链接的四种状态：
</p>
<p>
    a:link - 普通的、未被访问的链接
</p>
<p>
    a:visited - 用户已访问的链接
</p>
<p>
    a:hover - 鼠标指针位于链接的上方
</p>
<p>
    a:active - 链接被点击的时刻
</p>
<p>
    当为链接的不同状态设置样式时，请按照以下次序规则：
</p>
<p>
    a:hover 必须位于 a:link 和 a:visited 之后
</p>
<p>
    a:active 必须位于 a:hover 之后
</p>
<p>
    <br/>
</p>