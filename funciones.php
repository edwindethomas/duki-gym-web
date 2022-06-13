<?php 
    function formatear($html)
    {
        return htmlspecialchars($html,ENT_QUOTES | ENT_SUBSTITUTE,"UTF-8");
    }
?>