<template>
    <ol class='breadcrumb'>
        <li><a href='#'>Home</a></li>
        <li><a href='#'>Home</a></li>
        <li class='active'>Home</li>
    </ol>
</template>

<script>
    export default {
        props:[
            'lista',
        ],
        mounted:function(){
            console.log(this.lista);
        }
    }
</script>
