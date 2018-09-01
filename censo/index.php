<!DOCTYPE html>
<html>
<head>
	<title>encuesta</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<center><form method=" formulario php" method="POST">
		nombre:<input type="text" name="nombre">
		genero:<input type="text" name="genero">
		<br><br><br></center>
	
	<form method="formpost.php" method="POST">
		Por_que_ejerzo_de_docente<input type="text" name="por que ejerzo de docente">
		De_que_ejerceria_si_no_lo_hiciera_como_docente<input type="text" name="de que ejerceria si no lo hiciera como docente">
	    que siente minutos antes de entrar en un aula<input type="text" name="que siete minutos antes de entrar en un aula">
		
		<br><br><br>
		<form method="formpost.php" method="POST">
			como quiere que lo recuerden sus alumnos el día de mañana <input type="text" name="como quiere que lo recuerden sus alumnos el día de mañana ">
			se siente libre cuando enseña  <input type="text" name="se siente libre cuando enseña">
			se siente feliz cuando enseña <input type="text" name="se siente feliz cuando enseña">
<br><br><br>
		<form method="formpost.php" method="POST">
			Existe mucha distancia entre el registro que uso en clase y el de sus alumnos <input type="text" name="Existe mucha distancia entre el registro que uso en clase y el de sus alumnos">
			tiene clara la diferencia entre disciplina y castigo <input type="text" name="tiene clara la diferencia entre disciplina y castigo">
			cuantos minutos hablan sus alumnos en clase <input type="text" name="cuantos minutos hablan sus alumnos en clase">
<br><br><br>
			<form method="formpost.php" method="POST">
				 cuantos alumnos creo que seran capaces de entender lo que hoy les va a explicar <input type="text" name="cuantos alumnos creo que seran capaces de entender lo que hoy les va a explicar">
				que beneficios le aporta llegar puntual a clase <input type="text" name="que beneficios le aporta llegar puntual a clase">
				 que grado de pasión  y entusiasmo es capaz de transmitir mientras enseña <input type="text" name="que grado de pasión  y entusiasmo es capaz de transmitir mientras enseña">	 
<br><br><br>
			<form method="formpost.php" method="POST">
				Qué ha aprendido hoy de sus alumnos <input type="text" name="Qué ha aprendido hoy de sus alumnos">
				Qué posición ocupa en el aula para captar la atención de sus alumnos <input type="text" name="Qué posición ocupa en el aula para captar la atención de sus alumnos">
				Cuánto tiempo tardo en aprenderse el nombre de sus alumnos <input type="text" name="Cuánto tiempo tardo en aprenderse el nombre de sus alumnos">
<br><br><br>
		<form method="formpost.php" method="POST">
			Cómo gestiono el error que cometen sus alumnos <input type="text" name="Cómo gestiono el error que cometen sus alumnos">
			Cuándo ha sido la última vez que se ha reído con sus alumnos en clase <input type="text" name="Cuándo ha sido la última vez que se ha reído con sus alumnos en clase">
			es la misma persona fuera que dentro del aula <input type="text" name="es la misma persona fuera que dentro del aula">
<br><br><br>		<form method="formpost.php" method="POST">
		Mira constantente el reloj durante una sesión lectiva <input type="text" name="Mira constantente el reloj durante una sesión lectiva">
			se considero un docente empático <input type="text" name="se considero un docente empático">
			Qué persige en sus clases la perfección o la excelencia <input type="text" name="Qué persige en sus clases la perfección o la excelencia">
<br><br><br>
		<form method="formpost.php" method="POST">
			Qué tipo de preguntas predominan en sus clases las cerradas o las abiertas <input type="text" name="Qué tipo de preguntas predominan en sus clases, las cerradas o las abiertas">
			Cúanto tiempo dedico a pensar cómo será una sesión lectiva <input type="text" name="Cúanto tiempo dedico a pensar cómo será una sesión lectiva">
			Qué suele valorar más de sus clases el proceso o el resultado <input type="text" name="Qué suele valorar más de sus clases el proceso o el resultado">
<br><br><br>	
		<center>
			<form method="formpost.php" method="POST">
			Enseña de la misma manera en todos los grupos <input type="text" name="Enseña de la misma manera en todos los grupos">
		</center>
	<?php
	
	$Por_que_ejerzo_de_docente=s_POST("Que_lo_motivo_hacer_catedratico");
	$De_que_ejerceria_si_no_lo_hiciera_como_docente=s_POST("Cuantos_tiempo_le_llevo_ser_catedratico");
	$que_siente_minutos_antes_de_entrar_en_un_aula=s_POST("que siente minutos antes de entrar en un aula");
	$como_quiere_que_lo_recuerden_sus_alumnos_el_día_de_mañana=s_POST("como_quiere_que_lo_recuerden_sus_alumnos_el_día_de_mañana");
	$se_siente_libre_cuando_enseña =s_POST("se_siente_libre_cuando_enseña");
	$se_siente_feliz_cuando_enseña=s_POST("se_siente_feliz_cuando_enseña");
	$Existe_mucha_distancia_entre_el_registro_que_uso_en_clase_y_el_de_sus_alumnos=s_POST("Existe_mucha_distancia_entre_el_registro_que_uso_en_clase_y_el_de_sus_alumnos");
	$tiene_clara_la_diferencia_entre_disciplina_y_castigo=s_POST("tiene_clara_la_diferencia_entre_disciplina_y_castigo");
	$cuantos_minutos_hablan_sus_alumnos_en_clase=s_POST("cuantos_minutos_hablan_sus_alumnos_en_clase");
	$cuantos_alumnos_creo_que_seran_capaces_de_entender_lo_que_hoy_les_va_a_explicar=s_POST("cuantos_alumnos_creo_que_seran_capaces_de_entender_lo_que_hoy_les_va_a_explicar");
	$que_beneficios_le_aporta_llegar_puntual_a_clase=s_POST("que_beneficios_le_aporta_llegar_puntual_a_clase");
	$que_grado_de_pasión_y_entusiasmo_es_capaz_de_transmitir_mientras_enseña=s_POST("que_grado_de_pasión_y_entusiasmo_es_capaz_de_transmitir_mientras_enseña");
	$Qué_ha_aprendido_hoy_de_sus_alumnos=s_POST("Qué_ha_aprendido_hoy_de_sus_alumnos");
	$Qué_posición_ocupa_en_el_aula_para_captar_la_atención_de_sus_alumnos=s_POST("Qué_posición_ocupa_en_el_aula_para_captar_la_atención_de_sus_alumno"); 
	$Cuánto_tiempo_tardo_en_aprenderse_el_nombre_de_sus_alumnos=s_POST("Cuánto_tiempo_tardo_en_aprenderse_el_nombre_de_sus_alumnos");
	$Cómo_gestiono_el_error_que_cometen_sus_alumnos=s_POST("Cómo_gestiono_el_error_que_cometen_sus_alumnos");
	$Cuándo_ha_sido_la_última_vez_que_se_ha_reído_con_sus_alumnos_en_clase=s_POST("Cuándo_ha_sido_la_última_vez_que_se_ha_reído_con_sus_alumnos_en_clase");
	$es_la_misma_persona_fuera_que_dentro_del_aula=s_POST("es_la_misma_persona_fuera_que_dentro_del_aula");
	$Mira_constantente_el_reloj_durante_una_sesión_lectiva=s_POST("Mira_constantente_el_reloj_durante_una_sesión_lectiva");
	$se_considero_un_docente_empático=s_POST("se_considero_un_docente_empático");
	$Qué_persige_en_sus_clases_la_perfección_o_la_excelencia=s_POST("Qué_persige_en_sus_clases_la_perfección_o_la_excelencia");
	$Qué_tipo_de_preguntas_predominan_en_sus_clases_las_cerradas_o_las_abiertas=s_POST("Qué_tipo_de_preguntas_predominan_en_sus_clases_las_cerradas_o_las_abiertas");
	$Cúanto_tiempo_dedico_a_pensar_cómo_será_una_sesión_lectiva=s_POST("Cúanto_tiempo_dedico_a_pensar_cómo_será_una_sesión_lectiva");
	$Qué_suele_valorar_más_de_sus_clases_el_proceso_o_el_resultado=s_POST("Qué_suele_valorar_más_de_sus_clases_el_proceso_o_el_resultado");
	$Enseña_de_la_misma_manera_en_todos_los_grupos=s_POST("Enseña_de_la_misma_manera_en_todos_los_grupos");
	?>
</head>
<body>

</body>
</html>