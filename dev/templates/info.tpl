{include file="header.tpl" title="Info"}
<pre>
        User Information:
        <table>
        <tr>
            <td>Name: {$name|capitalize}</td><br>
            <td>Addr: {$address|escape}</td><br>
            <td>Date: {$smarty.now|date_format:"%b %e, %Y"}</td>
        </tr>
    </table>
</pre>


{include file="footer.tpl"}