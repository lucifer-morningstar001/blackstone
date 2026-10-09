<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Reset your Blackstone Aurum password</title>
</head>
<body style="margin:0; padding:0; background-color:#f3f4f6; color:#25283a; font-family:Arial,Helvetica,sans-serif;">
    <div style="display:none; max-height:0; overflow:hidden; opacity:0; color:transparent;">
        Use the secure link to reset your Blackstone Aurum password.
    </div>

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color:#f3f4f6;">
        <tr>
            <td align="center" style="padding:32px 16px;">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="width:100%; max-width:600px; background-color:#ffffff; border:1px solid #e5e7eb; border-radius:12px;">
                    <tr>
                        <td align="center" style="padding:32px 24px 24px; background-color:#17192b; border-radius:12px 12px 0 0;">
                            <img
                                src="{{ asset('website-assets/assets/img/logo/logo1.png') }}"
                                width="150"
                                alt="Blackstone Aurum"
                                style="display:block; width:150px; max-width:100%; height:auto; border:0;"
                            >
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 36px 20px;">
                            <p style="margin:0 0 12px; color:#9a7a3d; font-size:12px; font-weight:bold; letter-spacing:1.5px; text-transform:uppercase;">
                                Account security
                            </p>
                            <h1 style="margin:0 0 18px; color:#202236; font-size:28px; line-height:1.3; font-weight:700;">
                                Reset your password
                            </h1>
                            <p style="margin:0 0 16px; color:#4b5063; font-size:16px; line-height:1.7;">
                                Hello {{ $name ?? 'there' }},
                            </p>
                            <p style="margin:0 0 16px; color:#4b5063; font-size:16px; line-height:1.7;">
                                We received a request to reset the password for your Blackstone Aurum account.
                                Use the button below to choose a new password.
                            </p>
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin:26px 0;">
                                <tr>
                                    <td align="center" bgcolor="#d8b56d" style="border-radius:7px;">
                                        <a
                                            href="{{ $resetUrl ?? route('forgot') }}"
                                            style="display:inline-block; padding:14px 24px; border:1px solid #d8b56d; border-radius:7px; color:#211b11; font-size:15px; font-weight:bold; text-decoration:none;"
                                        >
                                            Reset my password
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="margin:0 0 12px; color:#4b5063; font-size:14px; line-height:1.7;">
                                For your security, this link should only be used once and expires according to your account's password-reset settings.
                            </p>
                            <p style="margin:0; color:#4b5063; font-size:14px; line-height:1.7;">
                                If you did not request a password reset, you can ignore this email. Your password will remain unchanged.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:20px 36px 28px; border-top:1px solid #e5e7eb;">
                            <p style="margin:0 0 8px; color:#73788a; font-size:12px; line-height:1.6;">
                                If the button does not work, copy and paste this URL into your browser:
                                <br>
                                <a href="{{ $resetUrl ?? route('forgot') }}" style="color:#80652f; word-break:break-all;">{{ $resetUrl ?? route('forgot') }}</a>
                            </p>
                            <p style="margin:0; color:#73788a; font-size:12px; line-height:1.6;">
                                &copy; {{ date('Y') }} Blackstone Aurum. All rights reserved.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>