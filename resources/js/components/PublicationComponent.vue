<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font-monospace">Список публикаций</div>

                    <div class="card-body">
                        <table class="table table-bordered border-primary">
                            <tr>
                                <th>№</th>
                                <th>Заголовок</th>
                                <th>Описание</th>
                            </tr>
                            <tr v-for="row in publication">
                                <td><a v-bind:href="'/publication/' + row.id">{{ row.id }}</a></td>
                                <td><a v-bind:href="'/publication/' + row.id">{{ row.title }}</a></td>
                                <td>{{ row.description }}</td>
                            </tr>
                        </table>
                        <a class="btn btn-outline-dark" href="/pubcreate">Создать</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { $dataMetaSchema } from 'ajv'

    export default {
        mounted() {
           
            //console.log('Component mounted.')
        },
        data: function () {
            var publication = null;
            $.ajax({
                url: '/publications',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: 'json',
                async: false,
                success: function(data) {
                    publication = data;
                }
            });
            return {
                publication: publication
            }
        },
    }
</script>
