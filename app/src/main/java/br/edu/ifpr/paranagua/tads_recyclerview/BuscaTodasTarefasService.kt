package br.edu.ifpr.paranagua.tads_recyclerview

import retrofit2.Call
import retrofit2.http.GET

/**
 * Created by aluno on 19/04/18.
 */
interface BuscaTodasTarefasService
{
    @GET("busca_todas.php")
    fun buscaTodas(): Call<List<Tarefa>>
}