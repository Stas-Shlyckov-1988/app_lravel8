<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список публикаций</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Заголовок</th>
                                <th>Описание</th>
                            </tr>
                            <tr v-for="row in publication">
                                <td>{{ row.title }}</td>
                                <td>{{ row.description }}</td>
                                <td></td>
                            </tr>
                        </table>
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
                url: '/publist',
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
