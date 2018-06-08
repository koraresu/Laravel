<table>
	<thead>
		<th colspan="2" style="text-align:center;"> Formulario de Contacto</th>
	</thead>
	<tbody>
		<tr>
			<th style="border-bottom: 1px solid #CCC;">Nombre:</th>
			<td style="border-bottom: 1px solid #CCC;">{{ $firstname }}</td>
		</tr>
		<tr>
			<th style="border-bottom: 1px solid #CCC;">Apellidos:</th>
			<td style="border-bottom: 1px solid #CCC;">{{ $lastname }}</td>
		</tr>
		<tr>
			<th style="border-bottom: 1px solid #CCC;">Email:</th>
			<td style="border-bottom: 1px solid #CCC;">{{ $email }}</td>
		</tr>
		<tr>
			<th style="border-bottom: 1px solid #CCC;">Requiero Información sobre:</th>
			<td style="border-bottom: 1px solid #CCC;">{{ $information }}</td>
		</tr>
		<tr>
			<th colspan="2" style="border-bottom: 1px solid #CCC;">Mensaje</th>
		</tr>
		<tr>
			<td colspan="2" style="border-bottom: 1px solid #CCC;">{{ $mess }}</td>
		</tr>
	</tbody>
</table>