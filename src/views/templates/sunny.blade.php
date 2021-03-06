<html>
	<head>
		<title>{{ $senderName or '' }}</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">{{ file_get_contents(app_path() . '/../vendor/desmond/beautymail/src/styles/css/sunny.css') }}</style>
	</head>
	<body>
	<table id="background-table" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
		<tr>
			<td align="center">
				<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
					<tbody>
					<tr class="large_only">
						<td class="w640" height="20" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" height="10" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" height="10" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" width="640" align="center">
							<img class="mobile_only mobile-logo" border="0" src="{{ $logo['path'] }}" alt="{{ $senderName or '' }}" width="{{ $logo['width'] }}" height="{{ $logo['height'] }}" />
						</td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" height="20" width="640"></td>
					</tr>
					<tr class="large_only">
						<td class="w640"  height="20" width="640"></td>
					</tr>

					<tr>
						<td class="w640" width="640" colspan="3" height="20"></td>
					</tr>

					<tr class="mobile_only">
						<td class="w640"  height="10" width="640" bgcolor="#ffffff"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640"  height="20" width="640" bgcolor="#ffffff"></td>
					</tr>
					<tr>
						<td id="header" class="w640" align="center" width="640">
							<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
								<tr>
									<td class="w30" width="30"></td>
									<td id="logo" width="{{ $logo['width'] }}" valign="top">
										<img border="0" src="{{ $logo['path'] }}" alt="{{ $senderName or ''}}" width="{{ $logo['width'] }}" height="{{ $logo['height'] }}" />
									</td>
									<td class="w30" width="30"></td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td class="w640" bgcolor="#ffffff" width="640">
							<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
								<tbody>

									@section('content')
									@show

								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td class="w640" bgcolor="#ffffff" width="640" colspan="3" height="20"></td>
					</tr>
					<tr>
						<td class="w640" bgcolor="#ffffff" width="640" colspan="3" height="20"></td>
					</tr>
					<tr>
						<td>
							<table width="640" class="w640" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td class="w410" width="410">
										@if (isset($senderName))
											<p id="sender-name" class="footer-content-left" align="left">{!! $senderName !!}</p>
										@endif
									</td>
									<td valign="top">
										<table align="right">
											<tr>
												<td colspan="2" height="10"></td>
											</tr>
											<tr>
												@if (isset($twitter))
													<td><a href="http://twitter.com/{{ $twitter }}"><img src="{{ Request::getSchemeAndHttpHost() }}/vendor/beautymail/assets/images/widgets/twitter.gif" alt="Twitter" style="border:0" /></a></td>
												@endif

												@if (isset($facebook))
													<td><a href="http://facebook.com/{{ $facebook }}"><img src="{{ Request::getSchemeAndHttpHost() }}/vendor/beautymail/assets/images/widgets/facebook.gif" alt="Facebook" style="border:0" /></a></td>
												@endif
											</tr>
										</table>
									</td>
									<td class="w15" width="15"></td>
								</tr>

							</table>
						</td>
					</tr>
					<tr>
						<td class="w640" width="640" colspan="3" height="20"></td>
					</tr>
					<tr>
						<td id="footer" class="w640" height="60" width="640" align="center">

							@section('footer')
							@show

						</td>
					</tr>
					<tr>
						<td class="w640" width="640" colspan="3" height="40"></td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		</tbody>
	</table>
	</body>
</html>
