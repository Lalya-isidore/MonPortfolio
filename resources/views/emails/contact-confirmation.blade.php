@extends('layouts.email')

@section('subject', '✨ Votre message est entre de bonnes mains')

@section('header')
    <h1
        style="margin: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #ffffff; font-size: 32px; font-weight: 800; letter-spacing: -0.04em; line-height: 1.2;">
        Message Bien Reçu !</h1>
    <p
        style="margin: 15px 0 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #94a3b8; font-size: 16px;">
        Merci de m'avoir contacté. Je reviens vers vous très vite.</p>
@endsection

@section('content')
    <p
        style="margin: 0 0 20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 17px; color: #1e293b;">
        Bonjour 👋 <strong>{{ $contactData['name'] }}</strong>,</p>

    <p
        style="margin: 0 0 30px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 16px; color: #475569; line-height: 1.6;">
        C'est un plaisir de recevoir votre demande concernant votre projet :<br>
        <span
            style="display: block; margin-top: 10px; padding: 12px; background-color: #f1f5f9; border-radius: 8px; color: #1e293b; font-weight: 600; font-size: 15px;">"{{ $contactData['subject'] }}"</span>
    </p>

    <div
        style="background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); border-radius: 20px; padding: 35px; border: 1px solid #bfdbfe; text-align: center; margin-bottom: 40px;">
        <h2
            style="margin: 0 0 10px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 20px; font-weight: 800; color: #1d4ed8; letter-spacing: -0.02em;">
            ⚡ Engagement Réponse</h2>
        <p
            style="margin: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 15px; color: #1e40af; line-height: 1.5;">
            Nous allons revenir vers vous <strong>dans au plus 24h</strong>.</p>

        <div style="margin-top: 25px; padding-top: 20px; border-top: 1px solid #bfdbfe;">
            <p
                style="margin: 0 0 15px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 15px; color: #1e40af; line-height: 1.5;">
                Si vous voulez une réponse rapide, rejoignez-nous directement via WhatsApp :
            </p>
            <a href="https://wa.me/22998201610"
                style="display: inline-block; padding: 12px 30px; background-color: #25D366; color: #ffffff; text-decoration: none; border-radius: 50px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-weight: 700; font-size: 15px; box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);">
                📱 (+229) 98 20 16 10
            </a>
        </div>
    </div>

    <h2
        style="margin: 0 0 20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 700; color: #0f172a;">
        💼 Mon Expertise à votre service</h2>
    <p
        style="margin: 0 0 25px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 15px; color: #64748b;">
        D'ici notre échange, voici comment je peux booster vos projets :</p>

    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 40px;">
        <tr>
            <td
                style="padding: 12px 0; border-bottom: 1px solid #f1f5f9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 15px; color: #334155;">
                🚀 <strong style="color: #6366f1;">Développement Web</strong> — Solutions Laravel & PHP robustes
            </td>
        </tr>
        <tr>
            <td
                style="padding: 12px 0; border-bottom: 1px solid #f1f5f9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 15px; color: #334155;">
                🛒 <strong style="color: #6366f1;">E-commerce</strong> — Boutiques Shopify & WordPress performantes
            </td>
        </tr>
        <tr>
            <td
                style="padding: 12px 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-size: 15px; color: #334155;">
                🔍 <strong style="color: #6366f1;">Stratégie Digital</strong> — SEO & SEA pour une croissance durable
            </td>
        </tr>
    </table>

    <div style="text-align: center; margin-bottom: 20px;">
        <a href="http://127.0.0.1:8000"
            style="display: inline-block; padding: 18px 45px; background-color: #0f172a; color: #ffffff; text-decoration: none; border-radius: 16px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-weight: 700; font-size: 15px; text-transform: uppercase; letter-spacing: 0.1em; box-shadow: 0 15px 30px rgba(15, 23, 42, 0.25);">VOIR
            MON PORTFOLIO</a>
    </div>

    <div style="margin-top: 50px; text-align: center;">
        <p
            style="margin: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; font-weight: 800; color: #0f172a; font-size: 18px;">
            ISIDORE LALYA</p>
        <p
            style="margin: 4px 0 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #94a3b8; font-size: 13px; text-transform: uppercase; letter-spacing: 0.15em;">
            Développeur Web & Consultant Digital</p>
    </div>
@endsection