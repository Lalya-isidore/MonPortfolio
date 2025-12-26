@extends('layouts.email')

@section('subject', '✨ Nouveau Message de Contact')

@section('header')
    <h1
        style="margin: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #ffffff; font-size: 32px; font-weight: 800; letter-spacing: -0.04em;">
        Nouveau Message</h1>
    <p
        style="margin: 10px 0 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #94a3b8; font-size: 16px;">
        Une nouvelle opportunité vous attend sur votre portfolio.</p>
@endsection

@section('content')
    <h2
        style="margin: 0 0 25px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 700; color: #0f172a; letter-spacing: -0.02em;">
        📌 Détails de la demande</h2>

    <div
        style="background-color: #f8fafc; border-radius: 16px; padding: 30px; border: 1px solid #e2e8f0; margin-bottom: 40px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding-bottom: 15px; border-bottom: 1px solid #f1f5f9;">
                    <span
                        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 4px;">EXPÉDITEUR</span>
                    <span
                        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 600; color: #1e293b;">{{ $contactData['name'] }}</span>
                </td>
            </tr>
            <tr>
                <td style="padding: 15px 0; border-bottom: 1px solid #f1f5f9;">
                    <span
                        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 4px;">EMAIL</span>
                    <span
                        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 600; color: #6366f1;">{{ $contactData['email'] }}</span>
                </td>
            </tr>
            <tr>
                <td style="padding-top: 15px;">
                    <span
                        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 11px; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 4px;">PROJET</span>
                    <span
                        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 600; color: #1e293b;">{{ $contactData['subject'] }}</span>
                </td>
            </tr>
        </table>
    </div>

    <h2
        style="margin: 0 0 20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 700; color: #0f172a;">
        💬 Message du visiteur</h2>
    <div
        style="background-color: #ffffff; border-radius: 12px; padding: 25px; border: 1px solid #e2e8f0; border-left: 6px solid #6366f1; color: #334155; line-height: 1.8; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 16px; font-style: italic;">
        "{{ $contactData['message'] }}"
    </div>

    <div style="text-align: center; margin: 45px 0 20px;">
        <a href="mailto:{{ $contactData['email'] }}"
            style="display: inline-block; padding: 18px 40px; background-color: #6366f1; color: #ffffff; text-decoration: none; border-radius: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-weight: 700; font-size: 15px; text-transform: uppercase; letter-spacing: 0.05em; box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);">RÉPONDRE
            DIRECTEMENT</a>
    </div>
@endsection