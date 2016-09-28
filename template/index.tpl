{%extends file="base.tpl"%}

{%block name="conf"%}
    {%config_load file="test.conf" section="setup"%}
{%/block%}

{%block name="title"%}
    {%$title%}
{%/block%}

{%block name="body"%}
    {%include file="header.tpl" title=$title%}
    {%#title#%}
    {%$body%}
    {%include file="footer.tpl" year='2016'%}
{%/block%}
