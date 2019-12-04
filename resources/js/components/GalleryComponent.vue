<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div v-for="url in urldata">
                    <img class="img" v-bind:src="url.poster">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'urldata',
        ],

    }
</script>

<style>
    .container img  {
        float: left;
        border: solid grey 1px;
        height: 250px;
        margin-left: 2px;
    }
</style>
